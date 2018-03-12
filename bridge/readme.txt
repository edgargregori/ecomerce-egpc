Patron de diseño Bridge:

Las Clases son:
    Coupon (Abstraction)
    ExchangeCoupon (RedefinedAbstraction)
    Discount (Implementor) 
        ByProduct (ImplementorA)
        ByCategory (ImplementorB)


    Validate = Verificar que el cupon y producto sean validos.
    Exchange = intercambio del valor del cupon por valor monetario.

Por que es necesario calcular los descuentos ya sea por producto ó categoria.
Ademas de verificar que el codigo de cupon sea valido y el  producto este disponible.

Conclusion: El Puente o conexion se da cuando tenemos Clases que calculan los descuentos, y otras que validan y almacenan en la base de datos (validate & exchange).
Estas clases se aplican cuando: Añadimos un producto al carro, y luego introducimos el valor del cupon para pagar compra con el descuento.
Estoy ayuda mantener la logica de cada tipo de descuento separadamente, al momento de calcular el descuento ya sea para agregar el carro de compras con descuento, o validar e intercambiar(exchange ~ descuento).  

ademas queremos que luego se los almacene en la base de datos(validate & exchange)
Nota: Por el tiempo corto y lo amplio que seria desarrollar los metodos faltantes, 
    esto se subsano mediante impresion de resultado de la función sin implmentarla.


