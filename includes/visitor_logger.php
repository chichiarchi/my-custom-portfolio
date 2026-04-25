<?php
/**
 * Visitor Logger
 * Tracks unique visitors based on IP and User-Agent.
 * Increments visit count and updates timestamp for returning visitors.
 */

function trackVisitor() {
    $logDir = __DIR__ . '/../data';
    $logFile = $logDir . '/visitors.json';

    // Ensure data directory exists
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }

    // Identify visitor
    $ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
    $visitorKey = md5($ip . $userAgent);
    $currentTime = date('Y-m-d H:i:s');
    $currentPage = $_SERVER['REQUEST_URI'] ?? 'Unknown';

    // Load existing logs
    $visitors = [];
    if (file_exists($logFile)) {
        $content = file_get_contents($logFile);
        if ($content !== false) {
            $visitors = json_decode($content, true) ?: [];
        }
    }

    if (isset($visitors[$visitorKey])) {
        // Update existing visitor
        $visitors[$visitorKey]['visit_count']++;
        $visitors[$visitorKey]['last_visit'] = $currentTime;
        $visitors[$visitorKey]['last_page'] = $currentPage;
    } else {
        // New visitor
        $visitors[$visitorKey] = [
            'ip' => $ip,
            'user_agent' => $userAgent,
            'first_visit' => $currentTime,
            'last_visit' => $currentTime,
            'last_page' => $currentPage,
            'visit_count' => 1
        ];
    }

    // Save logs back to file
    file_put_contents($logFile, json_encode($visitors, JSON_PRETTY_PRINT));
}

// Execute tracking
trackVisitor();
