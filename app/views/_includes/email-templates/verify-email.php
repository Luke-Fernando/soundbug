<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prata&family=Train+One&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Prata", serif;
            font-weight: 400;
            font-style: normal;
        }

        .train {
            font-family: "Train One", system-ui;
            font-weight: 400;
            font-style: normal;
        }
    </style>
    <title>Reset password</title>
</head>

<body style="background-color: white;">
    <div style="max-width: 600px;height: auto;margin: auto;padding: 40px 0;">
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>
                        <h1 style='text-align: center;font-family: "Train One", system-ui;font-weight: 400;font-style: normal;font-size: 2rem;'>
                            <span style="color: #f45b49;font-family: inherit;font-size: inherit;">SoundBug</span>.io
                        </h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <h2 style='text-align: center;font-size: 1.5rem;'>
                            Verify your email
                        </h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style='text-align: center;font-size: 1rem;'>
                            Please verify your email by clicking the button below.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style='text-align: center;'>
                        <a style='text-align: center;font-size: 1rem;background-color: #3f565a;color: #f5f5f5;text-decoration: none;padding: 5px 10px;'
                            href="soundbug.io/home?token<?php echo $token; ?>">
                            Verify email
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>