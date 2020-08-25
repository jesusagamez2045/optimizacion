<?php

$html = <<<HTML
    <form action="print.php" method="POST">
        <input type="number" min="1" max="100" placeholder="valor" required name="valor" id="valor">
        <button type="submit">Enviar</button>
    </form>
HTML;

echo $html;