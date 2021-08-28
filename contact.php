<?php include('header.html') ?>
<div class="container col-sm-8">
    <form action="index.php?submit=success" method="POST">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Your full Name</label>
            <input type="text" class="form-control " required>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Your phone number</label>
            <input type="tel" class="form-control " required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter your query</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" required></textarea>          
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>