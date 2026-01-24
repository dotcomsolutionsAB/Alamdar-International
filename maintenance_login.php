<?php
session_start();
include __DIR__ . '/config/static-data.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id  = trim($_POST['admin_id'] ?? '');
    $pwd = trim($_POST['admin_pwd'] ?? '');

    if ($id === MAINT_ADMIN_ID && $pwd === MAINT_ADMIN_PWD) {
        $_SESSION[MAINT_SESSION_KEY] = true;

        // redirect back to where they came from OR home
        $redirect = $_GET['redirect'] ?? 'index';
        header("Location: " . $redirect);
        exit;
    } else {
        $error = "Invalid credentials.";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-950 text-white flex items-center justify-center px-6">
  <div class="w-full max-w-md rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl">
    <h1 class="text-2xl font-extrabold tracking-tight">Admin Access</h1>
    <p class="text-white/60 mt-2 text-sm">Login to bypass maintenance mode.</p>

    <?php if ($error): ?>
      <div class="mt-4 rounded-2xl border border-red-500/30 bg-red-500/10 px-4 py-3 text-sm text-red-200">
        <?= htmlspecialchars($error) ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="mt-6 space-y-4">
      <div>
        <label class="text-sm text-white/70">Admin ID</label>
        <input name="admin_id" type="text" required
               class="mt-2 w-full rounded-2xl bg-slate-900/50 border border-white/10 px-4 py-3 outline-none focus:border-white/25"
               placeholder="example@gmail.com">
      </div>

      <div>
        <label class="text-sm text-white/70">Password</label>
        <input name="admin_pwd" type="password" required
               class="mt-2 w-full rounded-2xl bg-slate-900/50 border border-white/10 px-4 py-3 outline-none focus:border-white/25"
               placeholder="••••••••">
      </div>

      <button type="submit"
              class="w-full rounded-2xl bg-white text-slate-900 font-bold py-3 hover:bg-white/90 transition">
        Login
      </button>

      <a href="maintenance.html" class="block text-center text-sm text-white/60 hover:text-white mt-2">
        Back to Maintenance Page
      </a>
    </form>
  </div>
</body>
</html>
