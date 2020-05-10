-- funcion para cuando se hace una compra en la tabla compra
delimiter //
DROP function IF exists insertarCompra//

create function insertarCompra (numero_Tarjeta varchar(30), id_usuario int) returns int
begin
    declare id_venta_diaria int; -- obtiene el idVentaDiaria de la tabla ventadiaria donde la fecha es la actual
	declare horaCompra time; -- se declara una variable con tipo de dato hora
	
	set id_venta_diaria = (select idVentaDiaria from ventadiaria where fecha=CURDATE()); -- se obtiene el idVentaDiaria en base a la fecha
    set horaCompra = TIME(now());
	insert into compra (hora, numeroTarjeta, idUsuario, IdVentaDiaria, totalDeLaCompra) values (horaCompra, numero_Tarjeta, id_usuario, id_venta_diaria, null); -- se insertan todos lo datos en la tabla compra excepto el total de la compra
    return (select idCompra from compra where hora = horaCompra); -- se retorna el idCompra de la tabla compra
end; //
delimiter ;

-- funcion para insertar en en la tabla compra-producto
delimiter //
DROP function IF exists compraProducto//

create function compraProducto(id_compra int, id_Producto int, cantidad_producto int) returns boolean
begin
    declare precio_producto float; -- almacenará el precio del producto
    declare total_por_producto float; -- almacenará el total por cada producto
    
	set precio_producto=(select precio from producto where id_Producto=idProducto); -- obtiene el precio de ese producto
	set total_por_producto= cantidad_producto*precio_producto; -- hace la operación para obtener total por cada cantidad de un producto
	insert into compra_producto (idCompra, idProducto, cantidad, total) values (id_compra, id_producto, cantidad_producto, total_por_producto); -- inserta los datos en la tabla compra_producto
	return true;
end; //
delimiter ;

-- funcion que tiene una variable que almacena el total de la compra
delimiter //
DROP function IF exists totalFinalCompra//

create function totalFinalCompra(id_compra int) returns boolean-- recibe el idCompra de la compra que se esté realizando
begin
	declare total_final float; -- almacenará el total a pagar
    set total_final= (select sum(total) from compra_producto where id_compra = idCompra);-- se hace la suma de todos los productos y se guarda en total_final
	update compra set totalDeLaCompra = total_final where id_compra = idCompra; -- se actualiza la tabla compra donde el idCompra sea el mismo al que se recibió
    return true;
end; //
delimiter ;