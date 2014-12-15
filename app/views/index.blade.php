<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Referral Tree</title>
    <style type="text/css">
        .jOrgChart {
            margin: 10px;
            padding: 20px;
        }

        .jOrgChart .node {
            font-size: 14px;
            background-color: #35363B;
            border-radius: 8px;
            border: 5px solid white;
            color: #F38630;
            -moz-border-radius: 8px;
        }

        .node label {
            font-family: tahoma;
            font-size: 14px;
            line-height: 11px;
            padding-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">

    <ul id="org" style="display:none">
        <li>
            <label>Tree</label>
            {{$tree}}
        </li>
    </ul>


    <div id="chart" style="height:500px;padding-bottom: 80px;" class="orgChart">
        <div class="zoom">
            <span class="zoom_control">+</span>

            <div id="zoom_slider"></div>
            <span class="zoom_control">-</span>
        </div>
    </div>

</div>

{{HTML::style("//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css")}}
{{HTML::style("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css")}}

{{HTML::script("//code.jquery.com/jquery-1.11.0.min.js")}}
{{HTML::script("//code.jquery.com/jquery-migrate-1.2.1.min.js")}}
{{HTML::script("//code.jquery.com/ui/1.11.0/jquery-ui.js")}}
{{HTML::script("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js")}}
{{HTML::script("/assets/jorg-charts/jquery.jOrgChart.js")}}
{{HTML::style("/assets/jorg-charts/tree.css")}}
{{HTML::script("/assets/jorg-charts/tree.js")}}
{{HTML::script("/assets/jquery-kinetic/jquery.kinetic.js")}}

<script type="text/javascript">
    $(document).ready(function () {

        $("#org").jOrgChart({
            chartElement: '#chart',
            dragAndDrop: false,
            slider: true
        });

        $('#chart .cgsnode').tooltip();

        $('#chart').kinetic();
    });
</script>
</body>
</html>
