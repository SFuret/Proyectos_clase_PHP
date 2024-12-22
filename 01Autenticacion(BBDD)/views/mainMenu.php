<?php
echo "Menú principal<br>";
foreach ($data['permissions'] as $permission) {
    echo "<a href='index.php?action=" . $permission->action . "'>" . $permission->description . "</a><br>";
}