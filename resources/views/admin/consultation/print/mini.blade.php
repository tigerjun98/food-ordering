<!DOCTYPE html>
<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
    <style type="text/css">
        @media print {
            @page {
                margin: 30px 0;
            }
            body {
                margin: 1.6cm; max-width: 1048px;
                font-family: 'Nunito', sans-serif;
            }
        }

        :root {
            --edge-border-radius: 4px;
            --primary: #0055b1;
        }

        h4, p{
            margin: 0;
        }
    </style>
</head>

<body style="margin:0; padding:0;">
<!--Mailing Start-->
<div leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0"
     style="background-color:#ffffff;
     max-width:22cm; font-family:
     'Nunito',sans-serif !important;
     position: relative; padding: 0 30px 20px;">

    @if( str_contains( $template->value, 'layout-header,')  )
        <x-admin.component.prints.consultations.header
            :consultation="$consultation"
        />
    @endif

    <x-admin.component.prints.consultations.info
        :consultation="$consultation"
        :template="$template"
    />

    <x-admin.component.prints.consultations.prescription
        :prescriptions="$consultation->prescriptions"
        :template="$template"
    />

    <x-admin.component.prints.consultations.description
        :consultation="$consultation"
        :template="$template"
    />
</div>
<!--Mailing End-->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // window.print()
        // setTimeout(function(){ window.close(); }, 1250);
    }, false);
</script>
</body>
</html>
