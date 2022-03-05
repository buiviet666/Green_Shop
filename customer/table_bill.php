<?php
require "../admin/connect.php"; 
require "page_and_search_bill.php";
?>
<?php foreach ($resume as $get_bill){ ?>
<div class="p m">
  <!-- bảng giỏ hàng -->
    <!-- tiêu đề -->
      <div class="table-title text-center">
          <h3>Hóa đơn đã mua</h3>
      </div>

      
      <!-- bắt đầu vào bảng -->
      <table class="table-fill">
        <!-- phần 1 tiêu đề -->
          <thead>
            <tr class="viet">
              <th colspan="2" class="text-left bui">Họ và tên khách hàng</th>
              <th class="text-left bui">Người nhận hàng</th>
              <th class="text-left bui">Số điện thoại</th>
              <th class="text-left bui">Địa chỉ nhận hàng</th>
              <th class="text-left bui">Tình trạng đơn</th>
              <th class="text-left bui">Ngày, giờ đặt hàng</th>
              <th class="text-left bui">Tổng số tiền</th>
              <th class="text-left bui">xem chi tiết</th>
              <th class="text-left bui">xóa</th>
            </tr>
          </thead>

        <!-- phần 2 nội dung sản phẩm được thêm vào -->
          <tbody class="table-hover">
            <!-- Sản phẩm thứ nhất -->
              
                <tr class="viet">
                  <td class="text-left text-center"><?php echo $get_bill['last_name']; ?></td>
                  <td class="text-left text-center"><?php echo $get_bill['first_name']; ?></td>
                  <td class="text-left text-center"><?php echo $get_bill['name_receiver']; ?></td>
                  <td class="text-left text-center"><?php echo $get_bill['phone_receiver']; ?></td>
                  <td class="text-left text-center"><?php echo $get_bill['address_receiver']; ?></td>
                  <td class="text-left text-center">
                    <?php 
                      $status = $get_bill['status'];
                      if ($status == 0) {
                        echo 'Chưa duyệt';
                      }else if ($status == 1){
                        echo 'Đã duyệt';
                      }
                    ?>
                  </td>
                  <td class="text-left text-center">
                    <?php echo $get_bill['date_order']; ?>
                  </td>
                  <td class="text-left text-center">
                    <?php echo $get_bill['total_price']; ?>
                  </td>
                  <td class="text-left text-center">
                    <a href="detail_order?id=<?php echo $get_bill['id']; ?>&type=bill" style="color: red; text-decoration: none;">=></a>
                  </td>
                  <td class="text-left text-center">
                    <a href="delete_bill.php?id=<?php echo $get_bill['id']; ?>&type=bill" style="color: red; text-decoration: none;">X</a>
                  </td>
                </tr>
              

            </tbody>
        </table>
</div>
<?php } ?>