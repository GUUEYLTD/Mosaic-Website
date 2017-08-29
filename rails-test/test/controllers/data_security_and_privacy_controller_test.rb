require 'test_helper'

class DataSecurityAndPrivacyControllerTest < ActionDispatch::IntegrationTest
  test "should get index" do
    get data_security_and_privacy_index_url
    assert_response :success
  end

end
