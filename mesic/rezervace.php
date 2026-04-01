<?php include "header.php"; ?>


    <a href="index.php" style="text-decoration: none;">
    <div class="rezervace-text">
    <h1>Hotel Měsíc</h1>
    <h2 style="color: black;">Rezeravce pobytu</h2>
    </div>
    </a>

    <div class="pobyt">
        <form action="rezervace_vse.php" method="POST" class="rezervace">
            <div class="jmeno">
                <label for="jmeno">Jméno: </label>
                <input type="text" name="jmeno" id="jmeno" required>
            </div>

            <div class="prijmeni">
                <label for="prijmeni">Příjmení: </label>
                <input type="text" name="prijmeni" id="prijmeni" required>
            </div>

            <div class="email">
                <label for="email">Emailová adresa: </label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="dospeli">
                <label for="dospeli">Počet dospělých: </label>
                <input type="number" min="1" max="248" name="dospeli" id="dospeli" required>
            </div>

            <div class="deti">
                <label for="deti">Počet dětí: </label>
                <input type="number" min="0" max="247" name="deti" id="deti">
            </div>

            <div class="checkIn">
                <label for="checkIn">Datum příjezdu</label>
                <input type="date" name="checkIn" id="checkIn" required>
            </div>

            <div class="checkOut">
                <label for="chceckOut">Datum odjezdu: </label>
                <input type="date" name="checkOut" id="checkOut">
            </div>

            <input type="submit" value="Rezervovat">
        </form>
    </div>
</body>

</html>