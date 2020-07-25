<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>PHP Form</title>
</head>
<body class="bg-red-700 flex justify-center items-center h-screen">

<div class="border md:w-1/2 rounded-md">
  <div class="md:py-20 px-5">
    <form action="form-data.php" method="post" class="md:w-3/5 rounded md:ml-auto md:mr-auto">
      <div>
        <label for="name"></label>
        <input type="text" name="name" class="py-3 px-3 rounded w-full " placeholder="Firstname" required>
      </div>
      <div>
        <label for="name"></label>
        <input type="text" name="lastname" class="mt-3 py-3 px-3 rounded w-full " placeholder="Lastname" required>
      </div>
      <div>
        <label for="username"></label>
        <input type="text" name="username" class="py-3 px-3 mt-3 rounded w-full " placeholder="Username" required>
      </div>
      <div>
        <label for="number"></label>
        <input type="number" name="phone-number" class="py-3 px-3 mt-3 rounded w-full" placeholder="Phone Number" required>
      </div>
      <div>
        <label for="email"></label>
        <input type="email" name="email" class="py-3 px-3 mt-3 rounded w-full " placeholder="Email" required>
      </div>
      <input type="submit" name="submit" class="block mt-3 py-2 px-4 w-24 text-center mr-auto ml-auto rounded" value="Submit">
    </form>
  </div>
</div>
 
</body>
</html>