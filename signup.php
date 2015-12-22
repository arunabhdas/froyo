<?php include_once('header.php'); ?>


<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <div class="content">
        Sign Up
      </div>
    </h2>
    <!-- start of form -->
    <div class="ui form segment">
      <div class="two fields">
        <div class="field">
          <label>First Name</label>
          <input placeholder="First Name" name="first-name" type="text">
        </div>
        <div class="field">
          <label>Last Name</label>
          <input placeholder="Last Name" name="last-name" type="text">
        </div>
      </div>
      <div class="field">
          <label>Username</label>
          <input placeholder="Username" name="username" type="text">
      </div>
      <div class="field">
          <label>Password</label>
          <input placeholder="Password" name="password" type="text" autocomplete="off">
      </div>
      <button class="ui blue submit button">Submit</button>
    </div>
    <!-- end of form -->
    <!-- start of modal -->
    <div class="ui modal">
      <i class="close icon"></i>
      <div class="header">
        Header
      </div>
      <div class="content">
        <div class="left">
          Left content
        </div>
        <div class="right">
          Right content
        </div>
      </div>
      <div class="actions">
        <button class="ui negative button">
          Cancel
        </button>
        <button class="ui positive button">
          Okay 
        </button>
      </div>
    <!-- end of modal -->
  </div>
</div>

<?php include_once('footer.php'); ?>
