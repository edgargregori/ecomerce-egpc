<html>
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>Blog</title>
      <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
      <script type="text/javascript">
          window.ecomerce_product_model = "{!! addslashes(json_encode($model)) !!}"
      </script>
  </head>
  <body>
  
      <div>
      @foreach ($model as $element)
          <h1>
          </h1>
      @endforeach
      </div>
  
      <div id="app">
          <h1>
              @{{ model }}
          </h1>
            <ul>
                <li v-for="n in [10,9,8,7,6,5,4,3,2,1]">
                    @{{n}}
                </li>
            </ul>
            <ul>
                <li v-for="n in model">
                    categoria: @{{ n.product_category_id }}
                    nombre: @{{n.product_name}}
                    units: @{{n.units_in_stock}}
                </li>
            </ul>

      </div>
  
  <script type="text/javascript" src="{{ asset('js/app.js') }}"> </script>
  </body>
  </html>
