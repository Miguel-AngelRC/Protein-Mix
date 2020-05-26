-- funcion para cuando se hace una compra en la tabla compra
delimiter //
 DROP function IF exists insertarCompra//

create function insertarCompra (numero_Tarjeta varchar(30), id_usuario int) returns int
begin
    declare id_venta_diaria int; -- obtiene el idVentaDiaria de la tabla ventadiaria donde la fecha es la actual
	declare horaCompra time; -- se declara una variable con tipo de dato hora
	
	set id_venta_diaria = (select idVentaDiaria from VentaDiaria where fecha=CURDATE()); -- se obtiene el idVentaDiaria en base a la fecha
    set horaCompra = TIME(now());
	insert into Compra (hora, numeroTarjeta, idUsuario, IdVentaDiaria, totalDeLaCompra) values (horaCompra, numero_Tarjeta, id_usuario, id_venta_diaria, null); -- se insertan todos lo datos en la tabla compra excepto el total de la compra
    return (select idCompra from Compra where hora = horaCompra); -- se retorna el idCompra de la tabla compra
end; //
delimiter ;

-- funcion para insertar en en la tabla compra-producto
delimiter //
DROP function IF exists compraProducto//

create function compraProducto(id_compra int, id_Producto int, cantidad_producto int) returns boolean
begin
    declare precio_producto float; -- almacenará el precio del producto
    declare total_por_producto float; -- almacenará el total por cada producto
    
	set precio_producto=(select precio from Producto where id_Producto=idProducto); -- obtiene el precio de ese producto
	set total_por_producto= cantidad_producto*precio_producto; -- hace la operación para obtener total por cada cantidad de un producto
	insert into Compra_Producto (idCompra, idProducto, cantidad, total) values (id_compra, id_producto, cantidad_producto, total_por_producto); -- inserta los datos en la tabla compra_producto
	update Producto set stock = stock - cantidad_producto where idProducto = id_Producto; -- actualiza el stock
    return true;
end; //
delimiter ;

-- funcion que tiene una variable que almacena el total de la compra
delimiter //
DROP function IF exists totalFinalCompra//

create function totalFinalCompra(id_compra int) returns boolean-- recibe el idCompra de la compra que se esté realizando
begin
	declare total_final float; -- almacenará el total a pagar
    set total_final= (select sum(total) from Compra_Producto where id_compra = idCompra);-- se hace la suma de todos los productos y se guarda en total_final
	update Compra set totalDeLaCompra = total_final where id_compra = idCompra; -- se actualiza la tabla compra donde el idCompra sea el mismo al que se recibió
    return true;
end; //
delimiter ;


-- funcion para actualizar el total de una venta diaria
delimiter //
DROP function IF exists totalCompraDiaria//

create function totalCompraDiaria() returns boolean-- recibe el idCompra de la compra que se esté realizando
begin
	declare fechahoy date; 
    declare total float;
    
    set fechahoy = curdate();
    
    if (select count(*) from VentaDiaria where fecha = fechahoy) > 0 then
		set total = (select sum(totalDeLaCompra) from compra natural join VentaDiaria where fecha = fechahoy);
		update VentaDiaria set totalComprasD = total where fecha = fechahoy;
    end if;
    return true;
end; //
delimiter ;


-- funcion para actualizar el total de una venta diaria
delimiter //
DROP function IF exists insertaVentaDiaria//

create function insertaVentaDiaria() returns boolean-- recibe el idCompra de la compra que se esté realizando
begin
	declare fechahoy date; 
    
    set fechahoy = curdate();
    
    if (select count(*) from VentaDiaria)>0 then
		if (select max(fecha) from VentaDiaria where fecha = fechahoy) then
			 return true;
		else 
			insert into  VentaDiaria (totalComprasD, fecha) values (null, CURDATE());
		end if;
    else 
		 insert into  VentaDiaria (totalComprasD, fecha) values (null, CURDATE());
    end if;
    
    return true;
end; //
delimiter ;
select curdate();
select max(fecha) from VentaDiaria;

select insertaVentaDiaria();
select totalCompraDiaria();

select * from ventadiaria;
select * from compra;

SET GLOBAL log_bin_trust_function_creators = 1;