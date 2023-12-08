<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TXkpyIRGmZvFG6sCD3QA9uwNgg9UcD9TGQzDAl7N7PZq8lBDgDGNk9ccJCFCbhMp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-…" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .custom-btn {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
      text-align: center;
      text-decoration: none;
      color: white;
      background-color: #dc3545;
      border: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      margin-top: 100px;
    }

    .custom-btn:hover {
      background-color: #bd2130;
    }

    .custom-btn i {
      margin-right: 5px;
    }
  </style>
  <title>Button with Effect</title>
</head>
<body>

<a href="../?mod=user&act=logout" class="custom-btn">
  <i class="fas fa-sign-out-alt"></i> Đăng xuất
</a>

</body>
</html>
