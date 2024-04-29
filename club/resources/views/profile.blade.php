<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .btn3 {
  display: inline-block;
  padding: 12px 24px;
  background: #4DD4BF;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  font-weight: bold;
  position: relative;
  overflow: hidden;
}

.btn-icon3 {
  display: block;
  width: 32px;
  height: 32px;
  background-image: url('wp-content/uploads/sites/185/2021/10/change/ec3.png');
  background-size: cover;
  background-size: 35px ;
  background-repeat: no-repeat;
  position: absolute;
  top: 50%;
  left: 12px;
  transform: translateY(-50%);
}

.btn3::before {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.2);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.btn3:hover::before {
  opacity: 1;
}

</style>
<body>
    <h1>bonjour adherent</h1>
    <button type="submit" style="margin-left:1350px;" class="btn3"> <a href="{{ route('home') }}"  class="btn btn-icon3" ></a></button>

</body>
</html>
