<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/media/images/favicon.ico" />

        <title>DataTables example</title>



        <link href="{{asset('css/demo_page.css') }}" type="text/css" rel="stylesheet">

        <link href="{{asset('css/demo_table.css') }}" type="text/css" rel="stylesheet">


        <style type="text/css" title="currentStyle">
            @import "./media/css/demo_page.css";
            @import "./media/css/demo_table.css";
        </style>
        <script type="text/javascript"  src="{{asset('js/jquery.js') }}"  ></script>
        <script type="text/javascript"  src="{{asset('js/jquery.dataTables.js') }}"></script>




        <script type="text/javascript" >
$(document).ready(function () {
    $('#example').dataTable({
        "sPaginationType": "full_numbers"
    });
});
        </script>
    </head>
    <body id="dt_example" class="example_alt_pagination">
        <div id="container">

            <div id="demo">
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                    <thead>
                        <tr>
                            <th class="dani">id</th>
                            <th class="dani">title</th>
                            <th>body</th>
                            <th>create at</th>
                            <th>updated at</th>
                        </tr>
                    </thead>
                    <tbody>



                        <?php $posts = \DB::table('posts')->get(); ?>



                        <?php foreach ($posts as $data): ?> 




                            <tr class="gradeX">
                                <td><?php echo $data->id ?></td>
                                <td>
                                    <?php echo $data->title ?>
                                </td>
                                <td><?php echo $data->body ?></td>
                                <td class="center"><?php echo $data->created_at ?></td>
                                <td class="center"><?php echo $data->updated_at ?></td>
                            </tr>



                        <?php endforeach; ?>




                    </tbody>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>body</th>
                            <th>create at</th>
                            <th>update at</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="spacer"></div>
        </div>
    </body>
</html>