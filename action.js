
                                        // Lấy thẻ button bằng ID
                    const button = document.getElementById('button-lhn');

                    // Lấy thẻ footer bằng ID
                    const footer = document.getElementById('footer');

                    // Thêm sự kiện click cho button
                    button.addEventListener('click', () => {
                    // Sử dụng phương thức scrollIntoView() để kéo trang xuống footer
                    footer.scrollIntoView({ behavior: 'smooth' });
                    });


                    // Lấy các phần tử cần thiết
            var showFormButton = document.getElementsByClassName("show-form");
            var showFormDiv = document.getElementsByClassName("produce")
            var overlay = document.querySelector(".overlay");
            var formContainer = document.querySelector(".form-container");

            // Hiển thị form khi nhấp vào nút button
            Array.from(showFormButton).forEach(function(button) {
              button.addEventListener("click", function() {
                overlay.classList.add("active");
                formContainer.classList.add("active");
              });
            });
          // Hiển thị form khi nhấp vào thẻ div
          Array.from(showFormDiv).forEach(function(div){
              div.addEventListener("click", function(){
                  overlay.classList.add("active");
                formContainer.classList.add("active");
              });
          });
      
          // Đóng form khi nhấp ra ngoài form
          overlay.addEventListener("click", function(event) {
            if (event.target === overlay) {
              overlay.classList.remove("active");
              formContainer.classList.remove("active");
            }
          });


 
        // function changeInputValue(){
        //   var input1 = document.getElementById("inputValue");

        //   input1.innerHTML
        // }



                