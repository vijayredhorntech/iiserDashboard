<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>


<script>
    // for admin dashboard

    $("#registerPI").click(function(){
        $("#registerPIForm").toggleClass("hidden");
    });
    $("#registerVendor").click(function(){
        $("#registerVendorForm").toggleClass("hidden");
    });
    // for admin dashboard ends



    // for sub admin dashboard
    $("#registerLabMember").click(function(){
        $("#registerLabMemberForm").toggleClass("hidden");
    });
    $("#quotesManagement").click(function(){
        $("#quotesManagementForm").toggleClass("hidden");
    });
    $("#rolesPermission").click(function(){
        $("#rolesPermissionForm").toggleClass("hidden");
    });
    $("#rolesPermissionInventory").click(function(){
        $("#rolesPermissionInventoryForm").toggleClass("hidden");
    });
    // for sub admin dashboard ends



    // for vendor dashboard
    $("#manageProfile").click(function(){
        $("#manageProfileForm").toggleClass("hidden");
    });
    $("#manageProducts").click(function(){
        $("#manageProductsForm").toggleClass("hidden");
    });
    $("#saleOffers").click(function(){
        $("#saleOffersForm").toggleClass("hidden");
    });
    $("#quotationManagement").click(function(){
        $("#quotationManagementForm").toggleClass("hidden");
    });
    // for vendor dashboard ends









</script>

