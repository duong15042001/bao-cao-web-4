<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM sanpham, nhom_sp WHERE sanpham.id_category=nhom_sp.id_category AND sanphamr.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<h3>Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']; ?></h3>
				<ul class="product_list">
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<li>
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id'] ?>">
							<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="title_product">Tên sản phẩm : <?php echo $row['tensanpham'] ?></p>
							<p class="price_product">Giá : <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
							<p style="text-align: center;color:#d1d1d1"><?php echo $row['tendanhmuc'] ?></p>
						</a>
					</li>
					<?php
					} 
					?>
				</ul>