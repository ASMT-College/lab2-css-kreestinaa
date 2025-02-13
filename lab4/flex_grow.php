<!DOCTYPE html>
<html>
<head>
<style>
.flex-container {
  display: flex;
  flex-direction: row;
  background-color: lightblue;
  justify-content: center;
  align-items: center; 
}

.flex-container > div {
  background-color: white;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}

@media (max-width: 600px) {
  .flex-container {
    flex-direction: column;
  }
}
</style>
</head>
<body>

<h1>The flex-grow</h1>

<div class="flex-container">
  <div style ="flex-grow :1">1</div>
  <div style ="flex-grow :1">2</div>
  <div style ="flex-grow :8">3</div> 
  <div style ="flex-grow :1">4</div> 
</div>

</body>
</html>