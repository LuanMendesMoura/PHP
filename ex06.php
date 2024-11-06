<form action="ex06.php" method="POST">
    <div>
        <input type="text" name="A" placeholder="Valor A*">
        <input type="text" name="B" placeholder="Valor B*">
        <button>Trocar</button>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {   
        $A = $_POST["B"];
        $B = $_POST["A"];

        echo "
            <p>Valor de A: $A</p>
            <p>Valor de B: $B</p>
        ";
    }
    ?>
</form>