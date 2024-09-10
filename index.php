<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>PHP Todo list - JSON</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row gy-3">
                <div class="col-12">
                    <h1 class="text-center">ToDo List (PHP)</h1>
                </div>
                <div class="col-5">
                    <ul>
                        <li v-for="(l, i) in todoArray" :key="i" class="bg-warning my-3 py-2 px-3 fw-bolder" :class="{'text-decoration-line-through': l.done}" @click="l.done = !l.done"> {{l.name}}
                        </li>
                    </ul>
                </div>
                <div class="col-6 offset-3">
                    <input class="form-control form-control-sm" type="text" name="todo" id="todo-item" placeholder="Aggiungi qualcosa..." v-model="todo">
                </div>
                <div class="col-6 offset-3">
                    <div class="d-flex justify-content-center"><button class="btn btn-sm btn-success" @click="addItem()">Aggiungi</button></div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/script.js" type="text/javascript"></script>
</body>
</html>