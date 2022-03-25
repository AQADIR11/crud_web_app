<style>
    .active {
        background-color: green;
    }
</style>
<?php
if (!isset($_GET['user'])) {
    echo '<h1>Welcome Back</h1>';
}
if(isset($_GET['user'])){
?>


<div class="container">
    <table class="table mt-4">
        <caption id="pagination">Number of pages
        </caption>
        <input type="text" placeholder="Search Data" class="form-control mt-4" id="search-user">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody id="user-data">

        </tbody>
    </table>
</div>
<?php } ?>