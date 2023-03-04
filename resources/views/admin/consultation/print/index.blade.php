<!DOCTYPE html>
<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <meta charset="UTF-8">
    <title>Dore jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style type="text/css">
        @page { margin: 0; }
        @media print {
            @page { margin: 0; }
            body { margin: 1.6cm; max-width: 1048px; }
        }
        :root {
            --edge-border-radius: 4px;
        }
        .pt-30{
            padding-top: 30px;
        }
        .pb-30{
            padding-bottom: 30px;
        }
        .pt-15{
            padding-top: 15px !important;
        }
        .pr-15{
            padding-right: 15px !important;
        }
        .pb-15{
            padding-bottom: 15px !important;
        }
        .pt-10{
            padding-top: 10px !important;
        }
        .pb-10{
            padding-bottom: 10px !important;
        }
        .mb-15{
            padding-bottom: 15px !important;
        }
        .bold{
            font-weight: 600;
        }
    </style>
</head>

<body style="margin:0; padding:0;">
<!--Mailing Start-->
<div leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0"
     style="background-color:#ffffff;
     max-width:22cm; font-family:
     Helvetica,Arial,sans-serif !important;
     position: relative;">

    <x-admin.component.prints.layouts.section
        :class="'pt-15 pb-15'"
    >
        @slot('body')
            <x-admin.component.prints.layouts.header />
            <x-admin.component.prints.modules.consultation.info
                :consultation="$consultation"
            />
        @endslot
    </x-admin.component.prints.layouts.section>

    <x-admin.component.prints.modules.consultation.summary
        :consultation="$consultation"
    />

    <x-admin.component.prints.modules.consultation.prescriptions
        :prescriptions="$consultation->prescriptions"
    />

    <x-admin.component.prints.modules.separator />
    <x-admin.component.prints.modules.footer
        :text="'Yuan TCM Healthcare Center Sdn. Bhd. 202201046385(1492082-D)'"
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
