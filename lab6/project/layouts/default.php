<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/project/webroot/styles.css">
    <title><?= $title ?></title>
    <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      max-width: 1200px;
      margin: auto;
      padding: 20px;
    }

    aside {
      width: 20%;
      padding-right: 20px;
    }

    nav ul.menu {
      list-style-type: none;
      padding-left: 0;
    }

    nav ul.menu li {
      margin-bottom: 10px;
      background-color: rgba(200, 200, 200, 0.5);
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    nav ul.menu a {
      color: black;
      text-decoration: none;
    }

    main {
      width: 75%;
      background-color: rgba(200, 200, 200, 0.2);
      padding: 20px;
      border-radius: 10px;
    }

    footer {
      text-align: center;
      margin-top: 30px;
      padding: 20px;
      border-top: 1px solid #ddd;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <aside>
        <nav>
          <ul class="menu">
            <h1>Лабораторная работа №6</h1>
            <li><a href="/hello/">Hello</a></li>
            <li><a href="/act1/">Act 1</a></li>
            <li><a href="/act2/">Act 2</a></li>
            <li><a href="/act3/">Act 3</a></li>
            <li><a href="/nums/1/2/3/">Sum</a></li>
            <li><a href="/user/:id/">User ID</a></li>
            <li><a href="/user/:id/:key/">User ID (name, age, salary)</a></li>
            <li><a href="/users/all/">All Users</a></li>
            <li><a href="/users/first/2/">All Users First</a></li>
            <li><a href="/product/:n/">Product ID</a></li>
            <li><a href="/products/all/">All Products</a></li>
            <li><a href="/page/:id/">Show Page ID</a></li>
            <li><a href="/page/1">Show Page ID from db</a></li>
            <li><a href="/pages/">All Pages</a></li>
            <li><a href="/products/1">Show Product ID</a></li>
            <li><a href="/products/">All Products</a></li>          
          </ul>
        </nav>
      </aside>
      <main>
        <?= $content ?>
      </main>
    </div>
    <footer>
    </footer>
  </body>
</html>
