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

<h1>The flex-direction Property</h1>

<div class="flex-container">
  <div>1</div>
  <div>2</div>
  <div>3</div> 
  <div>4</div> 
</div>

</body>
</html>