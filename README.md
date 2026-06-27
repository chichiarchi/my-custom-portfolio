# sys.init() // Custom Portfolio Engine

A high-performance, handcrafted portfolio application built with vanilla PHP, CSS, and JavaScript. Designed to run as a serverless instance on Vercel, utilizing a hybrid local development architecture that abstracts away the need for global PHP installations.

---

## Technical Stack

- **Frontend**: Vanilla ES6+ JS, Semantic HTML5, CSS Bento Grid & Custom Flexbox Layouts.
- **Backend Core**: Vanilla PHP (v8.4+) routing and layout compilation.
- **Local Dev Server**: Node.js HTTP custom gateway.
- **Cloud Infrastructure**: Vercel Serverless Functions (via community php runtime).
- **Log Management**: Flat-file JSON visitor activity tracker.

---

## Directory Architecture

```text
my-custom-portfolio/
├── api/                       # Serverless Cloud Functions (PHP)
│   ├── index.php              # Central entrypoint / request router
│   ├── resume.php             # Resume page compiler
│   ├── includes/              # Component layouts
│   │   ├── header.php
│   │   ├── footer.php
│   │   └── visitor_logger.php # Quiet flat-file logger
│   └── data/                  # Local visitor JSON logs
├── assets/                    # Media assets & static documents
├── css/                       # Global stylesheets (served by Vercel Edge)
├── js/                        # Client-side scripts
├── bin/                       # (Git Ignored) Portable PHP CLI binaries
├── vercel.json                # Vercel routing and runtime config
├── .vercelignore              # Vercel upload ignore configuration
├── .gitignore                 # Git ignore configuration
├── local-server.js            # Local Node.js HTTP dev gateway
└── README.md                  # System documentation
```

---

## Local Setup & Execution

Run the local environment using the Node.js custom HTTP gateway, which executes PHP pages using a bundled portable binary (bypassing system dependencies):

1. **Start Environment**:
   ```bash
   node local-server.js
   ```

2. **Access Application**:
   Open [http://localhost:8000](http://localhost:8000) in your browser.

*To stop the dev server, send a SIGINT command (`Ctrl + C` / `Cmd + C`).*

---

## Vercel Serverless Architecture

To run in Vercel's serverless environment, the application is split into static assets (served by Vercel's global CDN) and PHP compiler functions (served via community AWS Lambda runtimes).

### vercel.json
```json
{
  "framework": null,
  "functions": {
    "api/*.php": {
      "runtime": "vercel-php@0.9.0"
    }
  },
  "rewrites": [
    {
      "source": "/(.*)",
      "destination": "/api/index.php"
    }
  ]
}
```

### Build & Routing Configuration
- **`"framework": null`**: Disables Vercel's automatic Node.js entrypoint checking.
- **`"functions"`**: Binds `.php` files inside `/api` to compile using the community `vercel-php` runtime.
- **`"rewrites"`**: Directs non-filesystem requests to the PHP controller, ensuring static resources (/css, /js, /assets) are served directly by the CDN.