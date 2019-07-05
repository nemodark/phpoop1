<?php require_once "header.php"; ?>
      <div class="card">
        <div class="card-body">
            <form action="user_action.php?action=update" method="post">

                <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
                
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $get_user['username']; ?>">
                </div>
                <div class="form-group">
                  <select name="category" id="" class="form-control">
                    <?php
                      require_once "classes/Category.php";
                      
                      $category = new Category;
                      $get_categories = $category->selectAll();
                      foreach($get_categories as $key => $row) {
                        $category_id = $row['category_id'];
                        $category_name = $row['category_name'];
                    ?>
                      <option value="<?php echo $category_id; ?>" 
                      <?php if($get_item['category_id'] == $category_id) echo "selected"; ?>>
                      <?php echo $category_name; ?>
                      </option>
                    <?php
                      }
                    ?>
                  </select>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $get_user['email']; ?>">
                </div>

                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" name="firstname" class="form-control" value="<?php echo $get_user['firstname']; ?>">
                </div>

                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" name="lastname" class="form-control" value="<?php echo $get_user['lastname']; ?>">
                </div>

                <button type="submit" class="btn btn-primary" name="add">Save</button>
            </form>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>