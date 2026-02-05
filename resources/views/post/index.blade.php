<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts List</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Posts</h3>
        <button class="btn btn-primary">+ Add New Post</button>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th width="20%">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td><strong>Sample Title</strong></td>
                        <td>This is sample content text.</td>
                        <td>
                            <button class="btn btn-sm btn-warning me-1">
                                Edit
                            </button>
                            <button class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><strong>Another Post</strong></td>
                        <td>Bootstrap table UI only.</td>
                        <td>
                            <button class="btn btn-sm btn-warning me-1">
                                Edit
                            </button>
                            <button class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
