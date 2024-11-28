<div id="galeria">
    <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: start;">
        <div style="text-align: center;">
            <?php
            $userImage = $app['user']->getImage();
            $username = $app['user']->getUsername();
            ?>
            <h1><?= htmlspecialchars($username) ?></h1>
            <div class="imagenes_galeria">
                <?php
                if ($userImage !== "") {
                    echo '<img src="' . htmlspecialchars($userImage) . '" alt="User Image" style="height: 350px; width: auto; border-radius: 10px;"><br>';
                } else {
                    $imageDefault = "/public/images/upload/limoncillo.jpg";
                    echo '<img src="' . htmlspecialchars($imageDefault) . '" alt="Default Image" style="height: 350px; width: auto; border-radius: 10px;"><br>';
                }
                ?>
                <p><strong>Username:</strong> <?= htmlspecialchars($username) ?></p>
            </div>
        </div>

        <div>
            <form action="/update-image" method="post" enctype="multipart/form-data" style="margin-bottom: 20px;">
                <h3 style="font-size:22px;">Change Image</h3>
                <div>
                    <label for="newImage">New Image:</label>
                    <input type="file" name="newImage" id="newImage" accept="image/*" required>
                </div>
                <button type="submit" style="margin-top: 10px;">Confirm</button>
            </form>

            <form action="/update-password" method="post">
                <h3 style="font-size:22px;">Change Password</h3>
                <div>
                    <label for="currentPassword">Actual Password:</label>
                    <input type="password" name="currentPassword" id="currentPassword" required>
                </div>
                <div>
                    <label for="newPassword">New Image:</label>
                    <input type="password" name="newPassword" id="newPassword" required>
                </div>
                <div>
                    <label for="confirmPassword">Confirmar Contraseña:</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" required>
                </div>
                <button type="submit" style="margin-top: 10px;">Actualizar Contraseña</button>
            </form>
        </div>
    </div>
</div>