<x-layout>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>User List</h4>
                    <h6>Manage your User</h6>
                </div>
                <div class="page-btn">
                    <a href="newuser.html" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img">Add
                        User</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="assets/img/icons/filter.svg" alt="img">
                                    <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg"
                                        alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="assets/img/icons/pdf.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="assets/img/icons/excel.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="assets/img/icons/printer.svg" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter User Name">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="datetimepicker cal-icon" placeholder="Choose Date">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select class="select">
                                            <option>Disable</option>
                                            <option>Enable</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                    <div class="form-group">
                                        <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg"
                                                alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>User name </th>
                                    <th>Phone</th>
                                    <th>email</th>
                                    <th>Role</th>
                                    <th>Created On</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>Thomas</td>
                                    <td>+12163547758 </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="fb8f9394969a88bb9e839a968b979ed5989496">[email&#160;protected]</a>
                                    </td>
                                    <td>Admin </td>
                                    <td>3/15/2022</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>504Benjamin</td>
                                    <td>123-456-888</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="60031513140f0d0512200518010d100c054e030f0d">[email&#160;protected]</a>
                                    </td>
                                    <td>Manager </td>
                                    <td>2/27/2022</td>
                                    <td><span class="bg-lightred badges">Restricted</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>James 524</td>
                                    <td>+12163547758 </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="a0cac1cdc5d3e0c5d8c1cdd0ccc58ec3cfcd">[email&#160;protected]</a>
                                    </td>
                                    <td>Salesman </td>
                                    <td>2/27/2022</td>
                                    <td><span class="bg-lightred badges">Restricted</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>James 524</td>
                                    <td>+12163547758 </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="94fef5f9f1e7d4f1ecf5f9e4f8f1baf7fbf9">[email&#160;protected]</a>
                                    </td>
                                    <td>Salesman </td>
                                    <td>2/27/2022</td>
                                    <td><span class="bg-lightred badges">Restricted</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>Bruklin2022</td>
                                    <td>123-456-888</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="d4b6a6a1bfb8bdba94b1acb5b9a4b8b1fab7bbb9">[email&#160;protected]</a>
                                    </td>
                                    <td>Delivery Biker </td>
                                    <td>2/27/2022</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>BeverlyWIN25</td>
                                    <td>+12163547758 </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="6e0c1c1b050207002e0b160f031e020b400d0103">[email&#160;protected]</a>
                                    </td>
                                    <td>Delivery Biker </td>
                                    <td>2/27/2022</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>BHR256</td>
                                    <td>123-456-888</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="d098a5b2b5a290b5a8b1bda0bcb5feb3bfbd">[email&#160;protected]</a>
                                    </td>
                                    <td>Sales Executive</td>
                                    <td>3/15/2022</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>Thomas</td>
                                    <td>+12163547758 </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="c5b1adaaa8a4b685a0bda4a8b5a9a0eba6aaa8">[email&#160;protected]</a>
                                    </td>
                                    <td>Admin </td>
                                    <td>3/15/2022</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>504Benjamin</td>
                                    <td>123-456-888</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="62011711160d0f071022071a030f120e074c010d0f">[email&#160;protected]</a>
                                    </td>
                                    <td>Manager </td>
                                    <td>2/27/2022</td>
                                    <td><span class="bg-lightred badges">Restricted</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>James 524</td>
                                    <td>+12163547758 </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="274d464a425467425f464a574b420944484a">[email&#160;protected]</a>
                                    </td>
                                    <td>Salesman </td>
                                    <td>2/27/2022</td>
                                    <td><span class="bg-lightred badges">Restricted</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>James 524</td>
                                    <td>+12163547758 </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="e48e85898197a4819c8589948881ca878b89">[email&#160;protected]</a>
                                    </td>
                                    <td>Salesman </td>
                                    <td>2/27/2022</td>
                                    <td><span class="bg-lightred badges">Restricted</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>Bruklin2022</td>
                                    <td>123-456-888</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="3b59494e505752557b5e435a564b575e15585456">[email&#160;protected]</a>
                                    </td>
                                    <td>Delivery Biker </td>
                                    <td>2/27/2022</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>BeverlyWIN25</td>
                                    <td>+12163547758 </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="52302027393e3b3c12372a333f223e377c313d3f">[email&#160;protected]</a>
                                    </td>
                                    <td>Delivery Biker </td>
                                    <td>2/27/2022</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>BHR256</td>
                                    <td>123-456-888</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="1b536e797e695b7e637a766b777e35787476">[email&#160;protected]</a>
                                    </td>
                                    <td>Sales Executive</td>
                                    <td>3/15/2022</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-layout>
