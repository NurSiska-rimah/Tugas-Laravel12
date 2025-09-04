<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Profile</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Dashboard</h2>
    <a href="#">Profile</a>

    <!-- Logout form -->
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="logout-btn">Logout</button>
    </form>
  </div>

  <!-- Main Content -->
  <div class="main">
    <div class="header">
      <p>you're log in!</p>
      <p>Nur Siskarimah</p>
    </div>

    <!-- Profile Information -->
    <div class="card">
      <h2>Profile Information</h2>
      <form>
        <label for="name">Name</label>
        <input type="text" id="name" value="Nur Siskarimah">

        <label for="email">Email</label>
        <input type="email" id="email" value="nursiskarimah@gmail.com">

        <button type="submit">SAVE</button>
      </form>
    </div>

    <!-- Update Password -->
    <div class="card">
      <h2>Update Password</h2>
      <form>
        <label for="current">Current Password</label>
        <input type="password" id="current">

        <label for="new">New Password</label>
        <input type="password" id="new">

        <label for="confirm">Confirm Password</label>
        <input type="password" id="confirm">

        <button type="submit">SAVE</button>
      </form>
    </div>

    <!-- Delete Account -->
    <div class="card">
      <h2>Delete Account</h2>
      <p>Once your account is deleted, all of its resources and data will be permanently deleted.</p>
      <button class="delete-btn">DELETE ACCOUNT</button>
    </div>
  </div>

</body>
</html>
