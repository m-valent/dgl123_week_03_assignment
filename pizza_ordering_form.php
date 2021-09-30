<!DOCTYPE html>
<html lang="en">


<?php
/*
Title:      Week 03 Assignment

Student:    Misko Valent
Due Date:   Sept 22, 2021
Filename:   pizza_ordering_form.php

Class:      DGL 123 - Introduction to PHP
Semester:   2021 Fall North Island College
Instructor: Brad Best

NOTE:  I know I do not require the extra HTML code, but for now am including it
unless you wish to just focus on the PHP and ignore the added HTML?
*/
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGL 123 - Week 03 Assignment pg1</title>
</head>

<body>

    <h1>Pizza Palace Order Submission</h1>

    <h3>Use the form below to submit your order:</h3>

    <form action="confirmation.php" method="post">

        <!-- Personal Customer Information needed for the order -->
        <fieldset>
            <legend>Customer Info</legend>
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="customer_name" value="" required />
                <!-- assuring field not left blank -->
                <small>(required)</small>
            </div>
            <br>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="customer_email" value="" required />
                <!-- type is assuring proper email is input -->
                <small>(required)</small>
            </div>
            <br>
            <div>
                <label for="phone">Cell #:</label>
                <input type="tel" id="phone" name="customer_phone" value="" placeholder="(123)456-7890" required />
                <small>(required)</small>
            </div>

        </fieldset>
        <br>

        <!-- Here I would ask for address, will assume this order is for pick up -->

        <!-- at this time I would organiz the catagories with a table to save room on the page
        by setting up columns and listing items across the page, however instead will just add
        the form inputs for the assignment and focus on styling another time -->



        <!-- Selecting the PIZZA size -->
        <fieldset>
            <legend>Pizza Size</legend>
            <div>
                <label for="size_1">
                    <input type="radio" id="size_1" name="pizza_size" value="personal">
                    Personal
                </label>
            </div>
            <div>
                <label for="size_2">
                    <input type="radio" id="size_2" name="pizza_size" value="medium">
                    Medium
                </label>
            </div>
            <div>
                <label for="size_3">
                    <input type="radio" id="size_3" name="pizza_size" value="large">
                    Large
                </label>
            </div>
            <div>
                <label for="size_4">
                    <input type="radio" id="size_4" name="pizza_size" value="family">
                    Family
                </label>
            </div>
            <br>
            <div>
                <label for="howMany">How Many:</label>
                <input type="text" id="howMany" name="howMany" value="1" required />
                <small>(required)</small>
            </div>

        </fieldset>
        <br>

        <!-- Selecting the PIZZA Type -->
        <fieldset>
            <legend>Pizza Type</legend>
            <!-- I used Papa Murphy's (my favourite pizzas) for inspiration-->
            <select id="selections" name="pizza_type">
                <optgroup label="Classic">
                    <option>Cheesy Cheese</option>
                    <option>Hawaiian</option>
                    <option>Pepperoni</option>
                    <option>Vegetarian</option>
                </optgroup>
                <optgroup label="Signature">
                    <option>Totally Canadian Eh!</option>
                    <option>Mystic Mediterranean</option>
                    <option>Crusty Cowboy</option>
                    <option>Meaty Monster</option>
                    <option>Voluminous Veggie</option>
                </optgroup>
                <optgroup label="Gourmet">
                    <option>Fiesta Chicken</option>
                    <option>Thai Chicken</option>
                    <option>BBQ Pulled Pork</option>
                    <option>Gourmet Italian</option>
                </optgroup>
                <optgroup label="Create Your Own">
                    <option selected>Pick Your Own Toppings</option>
                </optgroup>
            </select>
        </fieldset>
        <br>

        <!-- Although there are many values getting passed on with the POST, I am only outputting
the assignment required output as requested in #8 of the expected details -->

        <!-- PIZZA design details -->
        <fieldset>
            <legend>Pizza Design</legend>

            <!-- Selecting the PIZZA Crust -->
            <section>
                <strong>Select Your Crust</strong>
                <div>
                    <label for="crust_1">
                        <input type="radio" id="crust_1" name="pizza_crust" value="Original">
                        Original
                    </label>
                </div>
                <div>
                    <label for="crust_2">
                        <input type="radio" id="crust_2" name="pizza_crust" value="Stuffed">
                        Stuffed
                    </label>
                </div>
                <div>
                    <label for="crust_3">
                        <input type="radio" id="crust_3" name="pizza_crust" value="Thin">
                        Thin
                    </label>
                </div>
                <div>
                    <label for="crust_4">
                        <input type="radio" id="crust_4" name="pizza_crust" value="GlutFree">
                        Gluten Free
                    </label>
                </div>
            </section>
            <br>

            <!-- Selecting the PIZZA Sauce -->
            <section>
                <strong>Select Your Sauce</strong>
                <div>
                    <label for="sauce_1">
                        <input type="radio" id="sauce_1" name="pizza_sauce" value="RedSauce">
                        Traditional Tomato
                    </label>
                </div>
                <div>
                    <label for="sauce_2">
                        <input type="radio" id="sauce_2" name="pizza_sauce" value="Alferdo">
                        Creamy Alferdo Sauce
                    </label>
                </div>
                <div>
                    <label for="sauce_3">
                        <input type="radio" id="sauce_3" name="pizza_sauce" value="BBQsauce">
                        BBQ Sauce
                    </label>
                </div>
                <div>
                    <label for="sauce_4">
                        <input type="radio" id="sauce_4" name="pizza_sauce" value="OliveGarlic">
                        Olive Oil & Garlic Blend
                    </label>
                </div>
            </section>

        </fieldset>
        <br>

        <!-- Selecting the PIZZA Toppings -->
        <fieldset>
            <legend>Select Your Toppings (up to FIVE are free - EXTRA Charges Apply After That)</legend>

            <!-- Meats -->
            <section>
                <strong>Meats</strong>
                <div>
                    <input type="checkbox" id="Pepperoni" name="Pepperoni" value="select">
                    <label for="Pepperoni">Pepperoni</label>
                </div>
                <div>
                    <input type="checkbox" id="BackBacon" name="BackBacon" value="select">
                    <label for="BackBacon">Back Bacon</label>
                </div>
                <div>
                    <input type="checkbox" id="Salami" name="Salami" value="select">
                    <label for="Salami">Salami</label>
                </div>
                <div>
                    <input type="checkbox" id="Chorizo" name="Chorizo" value="select">
                    <label for="Chorizo">Chorizo</label>
                </div>
                <div>
                    <input type="checkbox" id="Chicken" name="Chicken" value="select">
                    <label for="Chicken">Chicken</label>
                </div>
                <div>
                    <input type="checkbox" id="ItalianSausage" name="ItalianSausage" value="select">
                    <label for="ItalianSausage">Italian Sausage</label>
                </div>
                <div>
                    <input type="checkbox" id="DonairMeat" name="DonairMeat" value="select">
                    <label for="DonairMeat">Donair Meat</label>
                </div>
                <div>
                    <input type="checkbox" id="GroundBeef" name="GroundBeef" value="select">
                    <label for="GroundBeef">Ground Beef</label>
                </div>
            </section>
            <br>

            <!-- Veggies -->
            <section>
                <strong>Veggies</strong>
                <div>
                    <input type="checkbox" id="Mushrooms" name="Mushrooms" value="select">
                    <label for="Mushrooms">Mushrooms</label>
                </div>
                <div>
                    <input type="checkbox" id="GreenPeppers" name="GreenPeppers" value="select">
                    <label for="GreenPeppers">Green Peppers</label>
                </div>
                <div>
                    <input type="checkbox" id="BlackOlives" name="BlackOlives" value="select">
                    <label for="BlackOlives">Black Olives</label>
                </div>
                <div>
                    <input type="checkbox" id="Onions" name="Onions" value="select">
                    <label for="Onions">Onions</label>
                </div>
                <div>
                    <input type="checkbox" id="Sun-driedTomatoes" name="Sun-driedTomatoes" value="select">
                    <label for="Sun-driedTomatoes">Sun-dried Tomatoes</label>
                </div>
                <div>
                    <input type="checkbox" id="Pineapple" name="Pineapple" value="select">
                    <label for="Pineapple">Pineapple</label>
                </div>
                <div>
                    <input type="checkbox" id="BananaPeppers" name="BananaPeppers" value="select">
                    <label for="BananaPeppers">Banana Peppers</label>
                </div>
                <div>
                    <input type="checkbox" id="ArtichokeHearts" name="ArtichokeHearts" value="select">
                    <label for="ArtichokeHearts">Artichoke Hearts</label>
                </div>
            </section>
            <br>

            <!-- Extras -->
            <section>
                <strong>Extras</strong>
                <div>
                    <input type="checkbox" id="MozzarellaCheddar" name="MozzarellaCheddar" value="select">
                    <label for="MozzarellaCheddar">Mozzarella & Cheddar Blend</label>
                </div>
                <div>
                    <input type="checkbox" id="FetaCheese" name="FetaCheese" value="select">
                    <label for="FetaCheese">Feta Cheese</label>
                </div>
                <div>
                    <input type="checkbox" id="ParmesanCheese" name="ParmesanCheese" value="select">
                    <label for="ParmesanCheese">Parmesan Cheese</label>
                </div>
                <div>
                    <input type="checkbox" id="ChiliFlakes" name="ChiliFlakes" value="select">
                    <label for="ChiliFlakes">Red Chili Flakes</label>
                </div>
                <div>
                    <input type="checkbox" id="Jalapenos" name="Jalapenos" value="select">
                    <label for="Jalapenos">Jalapenos</label>
                </div>
                <div>
                    <input type="checkbox" id="Anchovies" name="Anchovies" value="select">
                    <label for="Anchovies">Anchovies</label>
                </div>
            </section>
            <br>

        </fieldset>
        <!-- Offer the customer a textarea for special instructions -->
        <p><strong>Personal Message (optional)</strong>
        </p><textarea cols="80" rows="4" id="msg" name="user_message">Special instructions...</textarea>
        <br>
        <br>
        <input type="submit" value="Place Order" />

    <!-- Although there are many values getting passed on with the POST, I am only outputting
the assignment required output as requested in #8 of the expected details -->

    </form>

</body>

</html>