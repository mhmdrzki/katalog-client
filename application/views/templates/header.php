<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">

  <title><?php echo $judul; ?>
  </title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

      <a class="navbar-brand" href="<?=base_url();?>"><img src="<?=base_url();?>assets/img/ekatalog_logo.png" width="100px"></a>
      <ul class="nav navbar-nav" >
          <li style="padding-top: 10px" class="dropdown user">
              <a href="#" class="dropdown-toggle float-right" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><img src="<?=base_url();?>assets/img/rizki resize.jpg" class="profile">
                 <?php echo "Welcome,<b>" . $this->session->userdata('nama') . "</b>"; ?>
                  <i style="padding: 0" class="icon-angle-down"></i>
              </a>
                  <ul style="min-width: 200px" class="dropdown-menu">
                      <li><a href="<?=base_url();?>auth/logout"><i style="padding-right: 13px" class="icon-key"></i>Log Out</a></li>

                  </ul>
          </li>
      </ul>

    </div>
  </nav>