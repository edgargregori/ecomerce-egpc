
Como:
    Clases:
        CRM\CouponLookup (Adaptee ~ Adaptado)
        CRM\Coupon (Vendor ~ Externo)
        CRMCouponAdapter (Adaptador)
        Coupon  (Target ~ Interfaz que ve el cliente)
        MailCliente  (Cliente ~ Cliente)

Por que:
    Queremos  adaptar la clase que busca un codigo  de cupon, ya que no queremos modificar ese codigo.
    
    Y como resultado nos devuelva los detalles del cupon.
    Esto se aplicaria cuando ya se hizo la compra con el cupon 
    y queremos que estas compras con cupon se envien a un cliente que podria ser:
    el  departamento de ventas, inventarios, almacenes, etc.
