<?php require APPROOT . '/views/includes/header.php' ?>        
    <main>
    <body>
    <div class="container">
        
        <h1 class="main_heading">Payment</h1>
        <form action="">
            <h1 class="pf">Form</h1>
            <h2>contact information</h2>
            <p>Name: <input type="text" name="name" id="" required placeholder="john wonda"></p>
            <fieldset>
                <legend>Gender</legend>
                <p>
                    Male: <input type="radio" name="gender" id="male" required>
                    Female: <input type="radio" name="gender" id="female" required>
                    Other: <input type="radio" name="gender" id="other" required>
                </p>

            </fieldset>
            <p>Address: <textarea name="address" id="address" cols="100" rows="8" required
                    placeholder="Enter Address Here"></textarea></p>
            <p>Mail: <input type="email" name="email" id="email" placeholder="abcde44@gmail.com"></p>
            <p>pincode: <input type="number" name="pincode" id="pincode" required placeholder="000000"></p>
            <hr>
            <h2>Payment</h2>
            <p>Card Type:
                <select name="card type" id="card type" required>
                    <option value="">--Select A Card Type--</option>
                    <option value="Rupee">Rupee</option>
                    <option value="mastercard">Mastercard</option>
                    <option value="visa">Visa</option>
                </select>
            </p>
            <p>Card No.
                <input type="number" name="cardnumber" id="cardnumber" required placeholder="0000 0000 0000">
            </p>
            <p>
                Expiration:
                <input type="date" name="exp_date" id="exp_date" required>
            </p>
            <p>
                CVV: <input type="password" name="cvv" id="cvv" required placeholder="123">
            </p>
            <input type="submit" value="Pay Now">
        </form>
    </div>
</body>
    </main>
<?php require APPROOT . '/views/includes/footer.php' ?>        