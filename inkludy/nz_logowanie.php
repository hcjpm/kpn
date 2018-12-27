      <form action="index.php" method="POST">
				Login <input type="text" name="login" pattern="[A-Za-z0-9_-]{3,15}" title="Od 3 do 15 znaków (litery łacińskie, cyfry, _, -)" size="15" required>
				hasło <input type="password" name="haslo" pattern="[A-Za-z0-9_-]{8,15}" title="Od 8 do 15 znaków (litery łacińskie, cyfry, _, -)" size="15" required>
				<input type="hidden" name="no" value="logowanie">
				<input type="submit" value="Logowanie">
			</form>