<?php
    foreach ($arr['product'] as $item) {
?>
    <link rel="stylesheet" href="Views/Client/product-detail.css">
    <div class="container " style=" margin-top: 50px">
        <div class="row mb-0">
            <div class="col-md-5">
                <!-- slide hình ảnh -->
                        <img src="img/<?= $item['image'] ?>" style="width: 450px">
                    
            </div>

            <!-- thông tin sản phẩm -->
            <div class="col-md-5" style="margin-top: 30px; text-align: left; margin-left: 10px;">
                <div class="infor-product">
                        <h1 style="line-height: 2;"><?= $item['name'] ?></h1>
                        <div class="is-divider small">
                        </div>
                        <h2 style="color:red;line-height: 2;"><?= number_format($item['price']); ?>đ</h2>
                        <div class="desc">
                            <!-- <h3 style="line-height: 2; font-size: 20px;"><b>Vật liệu</b> </h3> 
                            <h10 style="margin-left: 5px; font-size: 10px;">khung kim loại</h10>
                            <h10 style="margin-left: 5px; font-size: 10px;">nhồi nệm bọc da tổng hợp</h10> -->

                            <div class="desc">
                                <h3 style="line-height: 2;"><b>Kích thước</b> </h3> 
                                <h10 style="margin-left: 5px;"><?= $item['size'] ?></h10>
                            </div>

                            <!-- <h5 style="line-height: 2; font-size: 14px;">Hàng có sẵn - </h5>
                            <a href="index.php" style="color: black; font-size:small;"><b>Xem cửa hàng trưng bày</b></a>

                            <h5 style="display:block; line-height: 2;font-size: 14px;">Mã:3*107371</h5> -->
                            <h5 style="line-height: 2; font-size: 14px;">Danh mục: <?php
                    if($item['cat_id'] == 1) {
                        echo '<td>Phòng Khách</td>';
                    }else {
                        echo '<td>Phòng Bếp</td>';
                    } 
                    ?></h5>
                        </div> 

                        <div class="buy-amount" style="display: inline;">
                          <button class="minus-btn" onclick="handleMinus()" ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                          </svg>
                          </button>
                          <input type="text" name="amount" id="amount" value="1">
                          <button class="plus-btn" onclick="handlePlus()"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                          </svg>
                          </button>
                        </div>

                        <button type="button" class="buy-now">Mua Ngay</button>
                        <button id="add-to-cart-btn" class="primary-btn">Thêm vào giỏ</button>
                        <div class="hotline-wrapper" style="line-height: 2; text-align: center; font-size: 14px;">
                            Liên hệ và tư vấn đặt mua:
                            <a class="hotline-phone" href="tel:18007200" style="color: red;">18007200</a>
                        </div>
                        <script>
                          let amountElement = document.getElementById('amount')
                          let amount = amountElement.value
                          // console.log(amount)

                          let render = (amount) => {
                            amountElement.value = amount
                          }
                          // xử lý handle plus
                          let handlePlus = () => {
                              amount++
                              render(amount);
                          }

                          // xử lý handle minus
                          let handleMinus = () => {
                              if(amount > 1)
                                  amount --;
                              console.log(amount);
                              render(amount);
    
                          }

                          amountElement.addEventListener('input', () =>{
                              amount = amountElement.value;
                              // console.log(amount);
                              amount = parseInt(amount);
                              amount = (isNaN(amount) || amount == 0)?1:amount;
                              console.log(amount);
                          } );
                        </script>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <?php } ?> 
