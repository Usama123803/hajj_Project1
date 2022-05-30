<table>
                    <thead style="background-color: #a2a2f5;height: 40px; text-align: center;">
                      <tr>
                        <th>Products/Services</th>
                        <th>Qty</th>
                        <th>Unit Price</th>
                        <th>Amount</th>
                        <th>Tax</th>
                        <th style="width: 10px;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr style="text-align: center;" id="tr1" class="col-sm-4">
                        <td>
                          <select id="productServices" style="width: 300px;margin: 20px 10px 0px 0px;" name="productServices" class="form-control">
                            <option id="">Choose Service</option>
                            <option qty="1" unitprice="9000" amount="5000" value="Makkah">Makkah</option>
                            <option qty="1" unitprice="7500" amount="4000" value="Madinah">Madinah</option>
                          </select>
                        </td>
                        <td><input style="width: 50px;margin: 20px 15px 0px 0px;" type="text" value="" id="qty" name="qty"></td>
                        <td><input style="width: 90px;margin: 20px 15px 0px 0px;" type="text" value="" id="unitprice" name="unitprice"></td>
                        <td><input style="width: 160px;margin: 20px 15px 0px 0px;" type="text" value="" id="amount" name="amount" readonly></td>
                        <td>
                          <input type="checkbox" id="checkbox" name="checkbox">
                        </td>
                        <td><input class="delete-row" type="button" value="Delete">
                          <!-- <i style="width: 50px;margin: 20px 0px 0px 0px;" class="fa fa-trash"></i> --></td>
                      </tr>
                      <tr>
                        <td style="text-align: left;" colspan="9">
                          <button class="add-row" type="button" style="color: white;text-decoration: none;background-color: #1a9ed4;height: 30px;width: 100px;border: 2px;padding: 5px;margin-top: 30px;">
                            <i class="fa fa-plus"></i>Add Line
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="4" class="text-right with-multiselect">
                          <select name="discount" id="discount" style="margin: 0px 25px 15px 0px">
                            <option>Enter Amount</option>
                            <option value="£0.00%">Discount percent</option> 
                            <option value="£0.00">Discount value</option>
                          </select>
                        </td>
                        <td>
                          <div style="display: flex;align-items: center;">
                            <input name="discounts" id="discounts" placeholder="Enter Discount" style="margin: 0px 15px 15px 0px" type="text">
                            <!-- <div id="div1"><em>%</em></div> -->
                           </div>
                         </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4" class="text-right with-multiselect">
                          <select name="salesTax" style="margin: 10px 25px 15px 0px">
                            <option value="sales-tax">Select Sales tax</option>
                          </select>
                        </td>
                        <td>
                          <div style="display: flex;align-items: center;">
                            <input name="salesTax" id="salesTax" style="margin: 10px 15px 15px 0px" type="text" placeholder="£0.00">
                          </div>
                         </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4" class="text-right with-multiselect">
                          <span style="margin: 0px 35px 0px 0px">Total Amount = </span>
                        </td>
                        <td>
                          <div style="display: flex;align-items: center;">
                            <input id="totalAmount" value="" name="totalAmount" style="margin: 10px 15px 15px 0px" type="text" placeholder="£0.00" readonly>
                          </div>
                         </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="9" style="text-align: left;">
                          <label for="exampleInputEmail1">Particulars</label>
                          <textarea name="particulars" style="width: 100%; height: 100px;" type="text" class="form-control" id="exampleInputEmail1" placeholder="particulars"></textarea>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="9" style="text-align: left;">
                          <div style="display: flex;align-items: center;flex-wrap: wrap; margin-top: 30px;">
                            <label class="col--attachement" style="margin-right: 10px;">Attachment</label> 
                            <form data-v-a00ede16="" enctype="multipart/form-data" novalidate="novalidate">
                              <div style="border: solid black 2px;padding: 20px;background-color: #c39898;"> To attach
                                <!-- <input data-v-a00ede16="" type="file" id="attachment" multiple="multiple" accept="image/*,.jpg,.png,.doc,.pdf" name="attachments[]" class="display-none">  -->
                                <label style="color: #243136;text-decoration: underline;padding: 0 7px;cursor: pointer;" 
                                for="attachment"><input type="file" name="file"></label>
                              </div>
                            </form>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="9" style="text-align: right; padding: 15px;">
                          <button style="margin-top: 20px;background-color: #1a9ed4;padding: 5px 40px 5px 40px;" type="submit" class="btn-fake">Save</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>