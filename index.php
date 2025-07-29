{\rtf1\ansi\ansicpg1252\cocoartf2709
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
if (isset($_GET['code']) && isset($_GET['shop'])) \{\
    // OAuth callback received\
    $code = $_GET['code'];\
    $shop = $_GET['shop'];\
    \
    $client_id = 'fc2536cc0113f4514a4f91c1d185a4d7';\
    $client_secret = '5af5985af3822ec411a3434c8b0b5682';\
    \
    echo "<h1>Brand Partner Router - Installation Complete!</h1>";\
    echo "<p>Shop: " . htmlspecialchars($shop) . "</p>";\
    echo "<p>Authorization Code: " . htmlspecialchars($code) . "</p>";\
    echo "<p>Installation completed at: " . date('Y-m-d H:i:s') . "</p>";\
\} else \{\
    echo "<h1>Brand Partner Router</h1>";\
    echo "<p>App is ready for installation.</p>";\
    echo "<p>Waiting for OAuth callback...</p>";\
\}\
?>\
}