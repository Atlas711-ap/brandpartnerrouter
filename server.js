const express = require('express');
const path = require('path');
const app = express();
const port = process.env.PORT || 3000;

app.use(express.static('.'));

// Handle OAuth callback
app.get('/', (req, res) => {
  const { code, shop, state } = req.query;
  
  if (code && shop) {
    // OAuth callback received
    res.send(`
      <h1>Brand Partner Router - Installation Complete!</h1>
      <p>Shop: ${shop}</p>
      <p>Authorization code received: ${code.substring(0, 10)}...</p>
      <p>Installation completed at: ${new Date().toISOString()}</p>
      <script>
        console.log('OAuth callback received');
        console.log('Shop:', '${shop}');
        console.log('Code:', '${code}');
      </script>
    `);
  } else {
    // Regular page load
    res.sendFile(path.join(__dirname, 'index.html'));
  }
});

app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});
