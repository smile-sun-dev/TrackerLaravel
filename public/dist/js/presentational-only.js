Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@smile-sun-dev 
Your account has been flagged.
Because of that, your profile is hidden from the public. If you believe this is a mistake, contact support to have your account status reviewed.
sixrevisions
/
responsive-full-background-image
Public
Fork your own copy of sixrevisions/responsive-full-background-image
Code
Issues
2
Pull requests
1
Actions
Projects
Wiki
Security
Insights
responsive-full-background-image/presentational-only/presentational-only.js /

sixrevisions Initial commit
Latest commit e45f535 on Jun 29, 2014
 History
 0 contributors
27 lines (24 sloc)  599 Bytes

$(document).ready(function()
{
  $('#load-more-content').click(function()
  {
    
    $('#more-content').toggleClass('shown');

    $('#load-more-content').hide();

    if( $('#more-content').hasClass('shown') )
    {
      $('#load-more-content').text('Hide content');
      $('#more-content').fadeIn('slow', function()
      {
        $('#load-more-content').fadeIn('slow');
      });
    }
    else
    {
      $('#load-more-content').text('Load some content');
      $('#more-content').fadeOut('slow', function()
      {
        $('#load-more-content').fadeIn('slow');
      });
    }
  });
});

