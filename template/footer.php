<footer class="py-4">
    <p class="text-center mb-0">Desarrollador @noscriptsh copyright <?= date('Y') ?></p>
    <p class="text-center mb-0">
        <?php
            $year = date('Y');
            if($year == "2021"){
                echo "2021";

            }else{
                echo "2021-".$year;
            }

        ?>
    </p>
</footer>

  </body>
</html>