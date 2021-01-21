<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/styles.css') ?>">
</head>

<body>

    <!-- navbar -->
    <?= $this->include('template/nav'); ?>

    <!-- content -->
    <?= $this->renderSection('content'); ?>

</body>

</html>