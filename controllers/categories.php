<?php

require("models/categories.php");

$model = new Categories();

$categories = $model->get();

require("views/categories.php");
