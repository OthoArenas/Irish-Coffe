-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-06-2019 a las 20:47:51
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Irish`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) CHARACTER SET utf8 NOT NULL,
  `imagen_completa` varchar(30) CHARACTER SET utf8 NOT NULL,
  `imagen_mini` varchar(30) CHARACTER SET utf8 NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `descripcion` longtext CHARACTER SET utf8 NOT NULL,
  `descripcion_corta` varchar(150) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `imagen_completa`, `imagen_mini`, `precio`, `descripcion`, `descripcion_corta`) VALUES
(1, 'Producto 1', 'producto_01.jpg', 'producto_mini_01.jpg', '25.00', 'Nulla in orci at est porta egestas id accumsan nisl. Sed cursus ante elit, non dapibus lectus ullamcorper ac. Donec finibus est vitae semper ultrices. Maecenas ante leo, ornare eget feugiat et, dignissim eget erat. Quisque semper felis in ante ornare, in tristique diam scelerisque. Nullam imperdiet luctus porttitor. Curabitur dictum lorem lorem, at facilisis sapien fermentum vel. In commodo arcu felis, id luctus ex bibendum at. Etiam tempus vehicula est eget pellentesque. Morbi quis lorem varius, tincidunt arcu ut, lacinia dolor. Suspendisse ac lacinia metus, et pellentesque justo. Ut nec arcu eu nulla finibus dapibus.\\r\\n\\r\\nQuisque arcu odio, consequat a leo eu, lobortis feugiat purus. Phasellus lectus nulla, convallis sit amet sollicitudin ac, placerat vulputate augue. Morbi lorem lectus, tincidunt et quam quis, rhoncus vulputate purus. Etiam ultrices ut justo ut blandit. Suspendisse at nisi eget quam porta tempor sed eu nibh. Suspendisse vehicula bibendum blandit. Curabitur laoreet malesuada commodo. ', 'Descripción corta del Kit de Hogar'),
(2, 'Producto 2', 'producto_02.jpg', 'producto_mini_02.jpg', '30.00', 'Suspendisse eleifend ac nisi non rutrum. Praesent pulvinar ex at luctus luctus. Ut fermentum condimentum nibh. Cras vitae lorem a nulla euismod dapibus. Duis tempor, odio eu cursus lobortis, velit turpis tristique lorem, in vehicula velit mi ut ipsum. Nullam sed sapien velit. Sed justo urna, consectetur sed rhoncus ut, tempor et lectus. Nulla a pulvinar lectus. Sed tempor dignissim convallis.\\r\\n\\r\\nMorbi a condimentum neque. Nam lectus lorem, molestie tincidunt tincidunt sit amet, commodo eget justo. Aenean et molestie neque. Nulla tincidunt suscipit metus at consequat. Fusce tincidunt nec ipsum eu auctor. Ut rutrum ligula vitae pretium congue. Nam placerat risus metus, nec consequat sem viverra vel. Aenean consectetur tortor purus, ut luctus leo molestie eu. Praesent tristique elit sit amet sapien placerat, ut tristique urna ultricies. Aenean et libero efficitur, consequat sapien vel, pharetra dui. Suspendisse luctus id sem sed consequat. Ut neque sapien, tempor sit amet lorem ut, rhoncus laoreet eros. Cras id urna id metus vestibulum gravida.', 'Aromaterapia y Esencias pequeña descripción'),
(3, 'Producto 3 ', 'producto_03.jpg', 'producto_mini_03.jpg', '15.00', 'Vivamus in commodo lectus. Maecenas tincidunt ac nulla lobortis varius. Suspendisse condimentum urna ac malesuada ultricies. Morbi semper tellus gravida elit tristique euismod. Sed ullamcorper tellus lorem, quis dapibus dolor tempus et. Vivamus sollicitudin neque non nunc efficitur, vitae sollicitudin turpis aliquam. Aliquam vitae est purus. Nulla efficitur ipsum ipsum, vulputate tempor augue lacinia ut. Suspendisse a augue at orci gravida laoreet. Duis vestibulum lorem vel sem molestie, id gravida lectus vestibulum. Pellentesque bibendum pellentesque lectus a hendrerit.\\r\\n\\r\\nInteger nec lobortis purus. Nam et est eu magna vulputate gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce nec efficitur arcu. Mauris ut lacus malesuada nisl accumsan tempor. Suspendisse et lectus massa. Ut gravida hendrerit finibus. Vestibulum in ante in justo varius dignissim vel eget dolor. Vivamus at malesuada erat, nec bibendum ex. Suspendisse nec elit ut massa interdum tincidunt sit amet sed leo. Fusce nec lorem lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu fringilla mauris, sit amet facilisis tellus. Etiam semper, elit eu facilisis tincidunt, lectus lectus vehicula nisi, at imperdiet ligula lectus eget turpis. Phasellus iaculis, dolor id ullamcorper congue, mi elit lobortis justo, eget tempus orci tellus vehicula lorem.', 'Jabón para Spa de 2 piezas con descripción corta'),
(4, 'Producto 4 ', 'producto_04.jpg', 'producto_mini_04.jpg', '20.00', 'Sed lobortis egestas sagittis. Pellentesque vestibulum scelerisque nisi quis consectetur. Duis pretium sem ac risus bibendum iaculis. Quisque a urna a lectus auctor tincidunt. Donec efficitur tempus interdum. Quisque imperdiet arcu eleifend dapibus cursus. Sed bibendum justo a bibendum tristique. Maecenas sollicitudin odio finibus, sollicitudin nunc sed, mollis ipsum. Fusce dapibus nisl nunc, a sagittis nibh posuere id. Mauris convallis tempus commodo. Pellentesque et elit leo. Etiam id neque turpis. Aliquam accumsan risus in enim faucibus, vitae congue orci tristique.\\r\\n\\r\\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Fusce dignissim dictum quam sed euismod. Maecenas molestie massa at pretium scelerisque. Fusce ut tortor egestas nulla viverra congue. Aenean euismod maximus ultrices. Aenean cursus cursus lacus, vel mattis nulla mollis at. Morbi dapibus egestas laoreet.', 'Kit para el Hogar 2 descripción corta'),
(5, 'Producto 5 ', 'producto_05.jpg', 'producto_mini_05.jpg', '35.00', 'Maecenas eget consectetur dolor, sit amet suscipit dolor. Ut facilisis augue vitae sem egestas sollicitudin. Sed commodo metus neque, id mattis justo tincidunt vitae. Sed pellentesque velit nec augue convallis, non facilisis tellus vestibulum. Mauris malesuada metus leo, et gravida turpis molestie sodales. Donec non dui quis sem semper pharetra. Donec ornare turpis sit amet ex interdum sollicitudin. Suspendisse quis purus massa. In eu finibus velit. Morbi consectetur ante at libero luctus pretium. Etiam sed lacus congue, varius dui vitae, suscipit massa.\\r\\n\\r\\nProin venenatis at libero ut porttitor. Morbi malesuada eleifend purus nec consequat. Pellentesque in elit urna. Nulla facilisi. Aenean sodales turpis vitae justo sodales, eget sagittis augue accumsan. Aenean quis dui justo. Duis sollicitudin pulvinar cursus.', 'Aromatic Candles Short Description'),
(6, 'Producto 6 ', 'producto_06.jpg', 'producto_mini_06.jpg', '3.00', 'Aenean vulputate nisi vitae nulla tincidunt, non ultrices lacus semper. Vivamus vestibulum sollicitudin turpis eget sagittis. Integer tristique fringilla fringilla. Integer sagittis dignissim felis eu ultrices. Nulla ac ante bibendum, finibus arcu et, mattis lacus. Morbi vehicula, justo quis consectetur condimentum, ipsum nunc cursus turpis, non dignissim nunc leo eget lorem. Ut massa ante, consequat a nisl ut, tempor tincidunt neque. Donec viverra venenatis vehicula. In sit amet mauris consequat, rutrum ligula vitae, tincidunt velit. Nunc rhoncus, felis id congue eleifend, tortor neque porttitor mi, vel sagittis leo ex at dui. Sed eros massa, vestibulum quis rutrum vel, pretium in tellus. Curabitur at turpis at ligula vehicula euismod a vitae erat. Proin et tellus eget metus vulputate tempor. Donec commodo ex eget diam maximus, a finibus leo suscipit. Morbi vulputate sapien sed tortor malesuada viverra. Phasellus lobortis felis ac varius bibendum.\\r\\n\\r\\nNullam tincidunt facilisis massa a auctor. Vivamus commodo diam at sapien mollis, rutrum malesuada est bibendum. Ut sagittis diam id ex interdum, non accumsan nisl sollicitudin. Integer sit amet suscipit lacus. Nam maximus dapibus odio, non dapibus orci placerat vitae. Donec auctor arcu vel egestas interdum. Sed consectetur diam vel turpis sodales, id vehicula leo ultrices. Aenean tincidunt enim justo, et rhoncus tellus mollis et.', 'Agua de Rosas descripción corta'),
(7, 'Producto 7', 'producto_07.jpg', 'producto_mini_07.jpg', '10.00', 'Maecenas nec aliquet nisl. Suspendisse risus ante, pulvinar eu porta pretium, pulvinar et tortor. Donec malesuada, nisi sit amet laoreet pellentesque, dolor nibh lobortis metus, vitae tincidunt justo turpis eget quam. Maecenas ut mollis nisi, in gravida nisl. Vivamus eget tincidunt mauris, et sodales neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed mollis dapibus consectetur. Integer tristique, erat vel pharetra ultrices, sapien leo gravida quam, vitae semper leo orci sed diam. Aliquam eu imperdiet elit. Nullam volutpat id massa id egestas. Nullam quis augue mauris. Praesent quis sagittis enim. Phasellus sed convallis odio. Phasellus et diam et elit fermentum ultricies.\\r\\n\\r\\nSuspendisse at sapien hendrerit, tincidunt lectus sed, aliquam quam. Mauris at consectetur ipsum. Suspendisse justo mi, suscipit nec dictum vitae, varius vitae ligula. Mauris in quam ac orci tincidunt condimentum in accumsan nisl. Morbi dictum viverra velit, eget elementum nisi luctus id. Nulla placerat ultricies augue. Morbi nec dui eros. Aliquam sit amet urna ac augue porta vulputate a eget arcu. Quisque elementum quam vel blandit feugiat. Vivamus dui dui, cursus vel vestibulum eu, iaculis eu purus. Nulla egestas sodales justo. Pellentesque congue id eros ac luctus. Sed metus risus, imperdiet id rutrum eu, imperdiet ut mi.', 'Descripcion corta de las piedras calientes'),
(8, 'Producto 8', 'producto_08.jpg', 'producto_mini_08.jpg', '12.00', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas malesuada, dui sed iaculis varius, augue felis volutpat est, id semper velit nunc eu tortor. Morbi ex lectus, semper eu aliquet vel, pharetra in elit. Aliquam maximus malesuada ante, eget porttitor erat imperdiet vel. Sed justo massa, mollis laoreet pulvinar eu, hendrerit nec sem. In suscipit gravida lectus, eget finibus augue mollis a. Ut iaculis elementum blandit. Ut tincidunt velit vel quam posuere, eget efficitur ex rutrum. Sed aliquam tellus id venenatis condimentum. Sed rhoncus, leo vitae sollicitudin tempor, nunc nisi auctor leo, vitae pharetra magna dolor sed tortor. In vitae tellus at ipsum interdum vulputate. Etiam tristique congue ligula eget ullamcorper. Sed scelerisque tincidunt auctor. Duis mollis nisi ut metus volutpat, ut lacinia ipsum blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida ante sed justo hendrerit, ac imperdiet nibh pellentesque.\\r\\n\\r\\nCras nec interdum nisl, id posuere nunc. Curabitur accumsan lorem vel nisi tincidunt imperdiet. Sed ultricies consequat neque ac venenatis. Pellentesque tristique sagittis turpis vel imperdiet. Sed at dui eu nisl elementum facilisis. Curabitur lacinia risus sed consectetur ultrices. Morbi ut tellus vitae nunc placerat cursus eu eget urna. Vivamus consectetur feugiat justo, nec maximus neque auctor quis. Suspendisse potenti. Maecenas ut pellentesque neque, id auctor mauris. Quisque justo odio, cursus ac ligula eget, aliquet aliquam ex. Aenean sed erat commodo, convallis nibh ut, imperdiet massa. Donec ultricies quis quam in gravida. Proin placerat felis at lorem fringilla, non fringilla turpis efficitur. Duis ullamcorper lacus nec nibh pharetra posuere id sit amet neque. Vivamus vel auctor libero, et imperdiet nisi.\\r\\n\\r\\n', 'Toallas descripción corta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
