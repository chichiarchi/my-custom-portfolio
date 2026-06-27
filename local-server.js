const http = require('http');
const fs = require('fs');
const path = require('path');
const { execFile } = require('child_process');

const PORT = 8000;
const PHP_PATH = path.join(__dirname, 'bin/bin/php7/bin/php');

const MIME_TYPES = {
    '.html': 'text/html',
    '.css': 'text/css',
    '.js': 'text/javascript',
    '.json': 'application/json',
    '.png': 'image/png',
    '.jpg': 'image/jpeg',
    '.jpeg': 'image/jpeg',
    '.gif': 'image/gif',
    '.svg': 'image/svg+xml',
    '.ico': 'image/x-icon',
    '.pdf': 'application/pdf',
};

const server = http.createServer((req, res) => {
    const parsedUrl = new URL(req.url, `http://${req.headers.host}`);
    let pathname = parsedUrl.pathname;

    console.log(`[${new Date().toISOString()}] ${req.method} ${pathname}`);

    // Route static files
    const ext = path.extname(pathname);
    const isStatic = ext && ext !== '.php';

    if (isStatic) {
        const filePath = path.join(__dirname, pathname);
        fs.access(filePath, fs.constants.F_OK, (err) => {
            if (err) {
                res.statusCode = 404;
                res.setHeader('Content-Type', 'text/plain');
                res.end('404 Not Found');
                return;
            }

            const contentType = MIME_TYPES[ext] || 'application/octet-stream';
            res.setHeader('Content-Type', contentType);
            fs.createReadStream(filePath).pipe(res);
        });
        return;
    }

    // Run PHP CLI for page requests
    // All page requests are routed through index.php
    const env = {
        ...process.env,
        REQUEST_URI: pathname,
        REMOTE_ADDR: req.socket.remoteAddress || '127.0.0.1',
        HTTP_USER_AGENT: req.headers['user-agent'] || 'Unknown',
    };

    // Execute php -n -d variables_order=EGPCS api/index.php
    execFile(
        PHP_PATH,
        ['-n', '-d', 'variables_order=EGPCS', 'api/index.php'],
        { env, cwd: __dirname },
        (error, stdout, stderr) => {
            if (error) {
                console.error(`PHP Execution Error: ${error.message}`);
                console.error(stderr);
                res.statusCode = 500;
                res.setHeader('Content-Type', 'text/html');
                res.end(`<h1>500 Internal Server Error</h1><pre>${error.message}\n${stderr}</pre>`);
                return;
            }

            res.statusCode = 200;
            res.setHeader('Content-Type', 'text/html');
            res.end(stdout);
        }
    );
});

server.listen(PORT, '127.0.0.1', () => {
    console.log(`Server is running at http://localhost:${PORT}`);
});
