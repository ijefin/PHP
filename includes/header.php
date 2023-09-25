<style>
    /* Estilos básicos */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        width: 200px;
        /* Ajuste conforme o tamanho do seu logo */
    }

    .search-box {
        flex: 1;
        margin: 0 20px;
        padding: 5px 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .action-buttons {
        display: flex;
        align-items: center;
    }

    .action-buttons a {
        color: #fff;
        text-decoration: none;
        margin-left: 10px;
    }
</style>
</head>

<body>
    <header>
        <div class="logo">
            <h3>Olá mundo!</h3>
        </div>
        <div>
            <input class="search-box" type="text" placeholder="Pesquisar">
        </div>
        <div class="action-buttons">
            <a href="#">Entrar</a>
            <a href="#">Registrar</a>
        </div>
    </header>
</body>