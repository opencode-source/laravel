<?php $__env->startSection('content'); ?>
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        <?php echo csrf_field(); ?>
        <!-- name -->
        <label for="name">Your name:</label>
        <input type="text" name="name" id="name" required>

        <!-- type -->
        <label for="type">Choose type of pizza:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="vegtable">Vegtable</option>
            <option value="special">Special</option>
            <option value="mix">Mix</option>
            <option value="pepperoni">Pepperoni</option>
            <option value="steak">Steak</option>
            <option value="meat and mushrom">Meat and Mushrom</option>
            <option value="Chicke">Chicke</option>
            <option value="Neapolitan">Neapolitan</option>
        </select>

        <!-- base -->
        <label for="base">Choose crust:</label>
        <select name="base" id="base">
            <option value="thick">Thick</option>
            <option value="thin">Thin</option>
            <option value="cheese">Cheese</option>
            <option value="garlic">Garlic</option>
            <option value="flat">Flat</option>
        </select>

        <!-- toppings -->
        <fieldset>
            <label>Extra Toppings:</label>
            <br />
            <br />
            <input type="checkbox" name="toppings[]" value="mushroom">Mushroom<br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="cheese">Cheese<br />
            <input type="checkbox" name="toppings[]" value="tomato">Tomato<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
            <input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni<br />
        </fieldset>
        <!-- submit -->
        <input type="submit" value="Order Pizza">
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\OpenCode\Desktop\Laravel 6 Course\pizzakade\resources\views/pizzas/create.blade.php ENDPATH**/ ?>