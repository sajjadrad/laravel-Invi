<?php
/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2013 Sajjad Rad
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
 * OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN
 * AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 * THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @package    Invi
 * @version    0.7
 * @author     Sajjad Rad [sajjad.273@gmail.com]
 * @license    MIS License (3-clause)
 * @copyright  (c) 2013
 * @link       http://sajjadrad.com.com
 */

class Invi_Invi_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('invitation', function($table) {
			$table->engine = 'InnoDB';
			$table->create();
			$table->increments('id')->unsigned();			
			$table->text('code', 255);
			$table->string('email');
			$table->date('expiration');
			$table->boolean('active');
			$table->boolean('used')->default(False);
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('invitation', function($table) {
                        $table->drop();
                });
	}

}