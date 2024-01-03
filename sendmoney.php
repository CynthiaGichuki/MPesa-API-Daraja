<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Money</title>
</head>
<body>
    <form class="row g-3" action="./stk_initiate.php" method="POST">
    <div class="col-12">
                 
                  <label for="inputAddress" class="form-label">Amount</label>
                  <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label" >Phone Number</label>
                  <input type="text" class="form-control" name="phone"  placeholder="Enter Phone Number">
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-success" name="submit" value="submit">SEND</button>
                </div>
</form>

    
</body>
</html>