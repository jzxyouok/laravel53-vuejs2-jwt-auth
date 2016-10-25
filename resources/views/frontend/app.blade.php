<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <title>Laravel</title>

    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <style type="text/css">
        .ui.vertical.stripe h3 {
            font-size: 2em;
        }
        .secondary.pointing.menu .toc.item {
            display: none;
        }
        .vuetable {
            margin-top: 1em !important;
        }
        .vuetable-wrapper.ui.basic.segment {
            padding: 0em;
        }
        .vuetable button.ui.button {
            padding: .5em .5em;
            font-weight: 400;
        }
        .vuetable button.ui.button i.icon {
            margin: 0;
        }
        .vuetable th.sortable:hover {
            color: #2185d0;
            cursor: pointer;
        }
        .vuetable-actions {
            width: 15%;
            padding: 12px 0px;
            text-align: center;
        }
        .vuetable-pagination {
            background: #f9fafb !important;
        }
        .vuetable-pagination-info {
            margin-top: auto;
            margin-bottom: auto;
        }
        [v-cloak] {
            display: none;
        }
        .highlight {
            background-color: yellow;
        }
        .vuetable-detail-row {
            height: 200px;
        }
        .detail-row {
            margin-left: 40px;
        }
        .expand-transition {
            transition: all .5s ease;
        }
        .expand-enter, .expand-leave {
            height: 0;
            opacity: 0;
        }
        tr.odd {
            background-color: #e6f5ff;
        }
        body {
            overflow-y: scroll;
        }
    </style>
</head>
<body>
<div class="container">
    <div id="app"></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>